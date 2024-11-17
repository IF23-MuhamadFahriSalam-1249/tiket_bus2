<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiket Saya</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
  <style>
    body {
      background-color: #f0f2f5;
    }
    .ticket-card {
      margin: 2rem auto;
      padding: 1rem;
      border-radius: 10px;
      border: 1px solid #e0e0e0;
      max-width: 600px;
      background-color: #ffffff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .ticket-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #e0e0e0;
      padding-bottom: 1rem;
      margin-bottom: 1rem;
    }
    .ticket-body {
      display: grid;
      grid-template-columns: 1fr 1fr;
      row-gap: 0.5rem;
    }
    .ticket-body div {
      padding: 0.5rem 0;
    }
    .barcode {
      text-align: center;
      margin-top: 1rem;
    }
    .center-text {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container mt-5 text-center">
    <h2 class="center-text">Tiket Saya</h2>
    <div id="ticketList" class="d-flex justify-content-center flex-wrap mt-4"></div>
  </div>

  <script>
    function generateBarcode(value) {
      const canvas = document.createElement('canvas');
      JsBarcode(canvas, value, { format: "CODE128" });
      return canvas.toDataURL('image/png');
    }

    function displayTickets() {
      const now = new Date();
      let tickets = JSON.parse(localStorage.getItem('tickets')) || [];
      const ticketList = document.getElementById('ticketList');

      // Filter out expired tickets
      tickets = tickets.filter(ticket => {
        const departureDate = new Date(ticket.departureDate);
        const timeDiff = now - departureDate;
        const hoursDiff = timeDiff / (1000 * 60 * 60);

        return !(departureDate < now && hoursDiff > 3);
      });

      // Update localStorage with filtered tickets
      localStorage.setItem('tickets', JSON.stringify(tickets));

      ticketList.innerHTML = ''; // Clear the ticket list

      tickets.forEach(ticket => {
        const departureDate = new Date(ticket.departureDate);
        let status = "Aktif";
        let cardClass = '';

        // Determine the ticket status
        if (departureDate < now) {
          const timeDiff = now - departureDate;
          const hoursDiff = timeDiff / (1000 * 60 * 60);

          if (hoursDiff <= 3) {
            status = "Kedaluwarsa";
            cardClass = 'expired';
          }
        }

        // Create a card for the ticket
        const ticketCard = document.createElement('div');
        ticketCard.className = `ticket-card ${cardClass}`;
        ticketCard.innerHTML = `
          <div class="ticket-header">
            <span>${ticket.busType}</span>
            <span>${new Date(ticket.purchaseDate).toLocaleDateString()}</span>
          </div>
          <div class="ticket-body">
            <div>Nama: ${ticket.name}</div>
            <div>Harga: ${ticket.price} IDR</div>
            <div>Jumlah Penumpang: ${ticket.passengers}</div>
            <div>Dari: ${ticket.fromCity}</div>
            <div>Ke: ${ticket.toCity}</div>
            <div>Status: ${status}</div>
          </div>
          <div class="barcode">
            <img src="${ticket.barcode}" alt="Barcode" />
          </div>
        `;
        ticketList.appendChild(ticketCard);
      });
    }

    // Call displayTickets function when the page loads
    window.onload = displayTickets;
  </script>
</body>
</html>
