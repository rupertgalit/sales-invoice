<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sales Invoice Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: "calibri";
      background-color: #f8f9fa;
      padding: 20px;
      font-size: 11px;
    }

    @media print {
      body * {
        visibility: hidden !important;
        /* Hide everything */
      }
      .date {
        margin-top: 20px !important;
      }
      .soldto {
        margin-left: -110px !important;
        margin-top: 5px !important;
      }
      .rn , .tin , .ba {
        font-size: 13px !important;
        font-weight: bolder !important;
        margin-left: -150px !important;
        width: 100%!important;
      }
      input[type="text"] {
        visibility: visible !important;
        background: transparent !important;
        box-shadow: none !important;
        outline: none !important;
        color: black !important;
        text-align: center !important;
      
      }
      .form-section1{
        margin-bottom: 10px!important;
        margin-left: 3px !important;
      }
      input[type="checkbox"] {
        visibility: visible !important;
        border: none !important;
      }
      table{
        text-align: right !important;
        margin-top: 15px!important;
        line-height: 190% !important;
        margin-left: 3px !important;
      }
      .table2{
        text-align: center !important;
        margin-left: 31% !important;
        line-height: 80%!important;
        margin-top: -20px!important;
      }
      .table1{
        margin-top: -25px!important;
        text-align: center !important;
        margin-left: 5%!important;
      }
      .col-md-6{
        margin-top:-10px!important;
      
      }
      .total {
        margin-top:-5px !important;
        margin-bottom: 5px !important;
      }
      .tax{
        margin-top:-5px !important;
      }
      @page {
        margin: 0 !important;
        size: 80mm;
      }

    }

    p {
      margin-top: .5rem;
    }

    .invoice-container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 21cm;
      height: 27.3cm;
      margin: auto;
    }

    .invoice-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-bottom: 5px;
    }

    .company-details {
      width: 80%;
      margin-left: -2%;
    }

    .company-details h2 {
      font-weight: bold;
      font-size: 27px;
      margin-bottom: -3px;
    }

    .company-details p {
      margin: 0;
      font-size: 0.9rem;
    }

    .invoice-number {
      text-align: center;
      font-size: 0.9rem;
      width: 19%;
    }

    .invoice-number h4 {
      font-weight: bold;
    }

    .date-form-container {
      display: flex;
      justify-content: space-between;
      align-items: end;
    }

    .form-check-input[type=checkbox] {
      border: 1px solid #000;
      border-radius: 0;
      box-shadow: none;
    }

    .date-box {
      border: 1px solid #000;
      border-bottom: none;

    }

    .date-box label {
      margin-left: 10px;
      position: relative;
      padding-right: 15px;
      font-weight: bold;
    }

    /* Vertical line after the Date: text */
    .date-box label::after {
      content: "";
      position: absolute;
      right: 0;
      top: -9px;
      width: 1px;
      height: 26px;
      background-color: #000;
    }

    .form-control {
      display: block;
      width: 50%;
      padding: .375rem .75rem;
      font-size: 11px;
      font-weight: 400;
      line-height: 1.5;
      margin-left: 10px;
    }

    .form-section {
      border: 1px solid #000;
      padding: 3px 0 0px 10px;
    }

    .form-section1 {
      border: 1px solid #000;
      padding: 10px;
      margin-bottom: 20px;
    }

    .section-title {
      margin-bottom: 2px;
      font-size: 11px;
      font-weight: bold;
    }

    table {
      height: 0.5cm;
      width: 100%;
      border-collapse: collapse;
      table-layout: fixed;
    }

    .table td,
    .table th {
      padding: 0%;
      height: 0.5cm;
      text-align: center;
      vertical-align: middle;
      border: 1px solid #000;
    }

    th:nth-child(1),
    td:nth-child(1) {
      width: 40%;
    }

    th:nth-child(2),
    td:nth-child(2),
    th:nth-child(3),
    td:nth-child(3),
    th:nth-child(4),
    td:nth-child(4) {
      width: 10%;
    }

    /* VAT Sales Section Enhancements */
    .vat-sales-table td,
    .vat-sales-table th {
      height: 0.5cm;
      text-align: right;
      vertical-align: middle;
      border: 1.5px solid #000;
      padding-right: 15px;
      font-size: 0.9rem;
    }

    .vat-sales-table th {
      background-color: #f1f1f1;
      font-weight: bold;
      text-align: center;
    }

    .vat-sales-container {
      border: 2px solid #000;
      padding: 15px;
      border-radius: 10px;
      background-color: #fafafa;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .vat-sales-title {
      font-weight: bold;
      font-size: 1.1rem;
      text-align: center;
      margin-bottom: 10px;
      color: #333;
    }

    .table1 {
      margin-top: 14px;
      text-align: right;
      font-size: 11px;
      width: 55%;
    }
    .table1 {
      margin-top: 14px;
      text-align: right;
      font-size: 11px;
      width: 55%;
    }

    .table1 th:nth-child(1),
    td:nth-child(1) {
      width: 5%;
    }

    .table2 {
      margin-top: 14px;
      margin-left: 20%;
      text-align: right;
      font-size: 11px;
      width: 80%;
    }

    .table2 th:nth-child(1),
    td:nth-child(1) {
      width: 10%;
    }

    .form-check {
      display: block;
      min-height: 1.5rem;
      padding-left: 3em;
      margin-bottom: 2.125rem;
    }

    .form-section1 input {
      height: 0.5cm;
      font-family: "Calibri";
      font-size: 11px;
      width: 70%;
      border: none;
      outline: none;
    }

    .table td input {
      height: 0.5cm;
      font-family: "Calibri";
      font-size: 11px;
      border: none;
      outline: none;
      text-align: center;
    }

    .form-control,
    input[type="text"],
    input[type="date"] {
      border: none;
      outline: none;
      height: 0.5cm;
      width: 80%;
      line-height: 1.6;
      font-family: "Arial";
      letter-spacing: 1px;
      font-size: 12px;
    }

    .info {
      margin-bottom: 4px !important;
    }
  </style>
</head>

<body>
  <div class="invoice-container">
    <div class="invoice-header">
      <div>
        <img src="/assets/images/NGSI_logo.jpg" alt="Company Logo" style="height: 125px" />
      </div>
      <div class="company-details">
        <h2>NETGLOBAL SOLUTIONS, INC.</h2>
        <p>VAT Reg. TIN: 009-717-336-00000</p>
        <p>59 West Capitol Drive, Kapitolyo, Pasig City</p>
        <p>Tel. #: (02) 358-0333</p>
      </div>
      <div class="invoice-number">
        <h4>
          SALES <br />
          INVOICE
        </h4>
      </div>
    </div>
    <div class="date-form-container">
      <div class="col-md-6">
        <label class="form-check-label"><input type="checkbox" class="form-check-input" /> CASH SALES</label><br />
        <label class="form-check-label"><input type="checkbox" class="form-check-input" /> CHARGE SALES</label>
      </div>

      <div class="col-md-4 date-box ">
        <label for="date">Date:</label>
        <input type="text" id="date" class="date"  style="
    margin-top: 5px;    width: 70% !important;
" class="date">
      </div>
    </div>

    <div class="form-section">
      <h6 class="section-title">SOLD TO:<input type="text"  style="
           margin-top: 5px;
    margin-left: 20px;
" class="soldto"></h6>
    </div>
    <div class="form-section1">
      <p class="info" style="display: flex; width: 100%;">
        <span style="flex-basis: 85px;">Registered Name:</span><input type="text"
           class="rn" />
      </p>
      <p class="info" style="display: flex; width: 100%;">
        <span style="flex-basis: 85px;">TIN:</span><input type="text" 
          class="tin" />
      </p>
      <p class="info" style="display: flex; width: 100%;">
        <span style="flex-basis: 85px;">Business Address:</span><input type="text"
           class="ba">
      </p>
    </div>


    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ITEM DERSCRIPTION / NATURE OF SERVICE</th>
            <th>QUANTITY</th>
            <th>UNIT PRICE</th>
            <th>AMOUNT</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
          <tr>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
            <td><input type="text"  class="onerow" /></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="row">
      <!-- Left Section -->
      <div class="col-md-6 ">
        <table class="table1 table-bordered">
          <tbody>
            <tr>
              <td>VATable Sales</td>
              <td><input type="text"  class="vatsales" /></td>
            </tr>
            <tr>
              <td>VAT</td>
              <td><input type="text"  class="vat" /></td>
            </tr>
            <tr>
              <td>Zero-Rated Sales</td>
              <td><input type="text"  class="zero" /></td>
            </tr>
            <tr>
              <td>VAT-Exempt Sales</td>
              <td><input type="text"  class="vatex" /></td>
            </tr>
          </tbody>
        </table>
        <div class="form-check ">
          <input type="checkbox" class="form-check-input" id="receivedAmount" />
          <label class="form-check-label" for="receivedAmount">
            Received the amount of
          </label>
        </div>
        <hr>
        <!-- Footer Section -->
        <div class="row ">
          <div class="col">
            <p class="small mb-0">
              BIR AUTHORITY TO PRINT NO.: 043AU2024000001338<br />
              DATE ISSUED: 18-SEPT-2024<br />
              APPROVED SERIES: 0501-1000 10 BKTS. (2X)
            </p>
          </div>
        </div>
      </div>

      <!-- Right Section -->
      <div class="col-md-6">
        <table class="table2 table-bordered">
          <tbody>
            <tr>
              <td>Total Sales (VAT Inclusive)</td>
               <td><input type="text"  class="vatinc" /></td>
            </tr>
            <tr>
              <td>Less: VAT</td>
               <td><input type="text"  class="lessvat" /></td>
            </tr>
            <tr>
              <td>Amount: Net of VAT</td>
               <td><input type="text"  class="netvat" /></td>
            </tr>
            <tr>
              <td style="
    text-wrap-mode: nowrap;
    font-size: 8px;
">Less: Discount (SC/PWD/NAAC/MOV/VBP)</td>
               <td><input type="text"  class="less" /></td>
            </tr>
            <tr>
              <td>Add: VAT</td>
               <td><input type="text"  class="addvat" /></td>
            </tr>
            <tr>
              <td>Less: Withholding Tax</td>
               <td><input type="text"  class="tax" /></td>
            </tr>
            <tr>
              <th>TOTAL AMOUNT DUE</th>
              <th><input type="text"  class="total" style="
    font-size: 13px;
    font-weight: bolder;
"></th>
            </tr>
          </tbody>
        </table>
        <br>

        <table class="table2 " style="margin-top: -7px!important;">
          <tbody>
            <tr>
              <td style="
    text-wrap-mode: nowrap;
    font-size: 8px;
"> SC/PWD/NAAC/MOV
                Solo Parent ID No.:</td>
              <td style="border: 1px solid #000;"><input type="text"  class="solo" /></td>
            </tr>
            <tr>
              <td style="
    text-wrap-mode: nowrap;
    font-size: 8px;
">SC/PWD/NAAC/MOV
                Signature:</td>
              <td style="border: 1px solid #000;"><input type="text"  class="sign" /></td>
            </tr>
        </table>

        </p>
      </div>
    </div>

    <div class="text-center mt-1">
      <button onclick="window.print()" class="btn btn-secondary">Print Invoice</button>
    </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>