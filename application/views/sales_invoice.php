
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sales Invoice Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css">
 
  </head>
  <body>
    <div class="invoice-container">
      <div class="invoice-header">
        <div>
          <img src="NGSI_logo.jpg" alt="Company Logo" style="height: 125px" />
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
          <label class="form-check-label" style="   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 16px;"
            ><input type="checkbox" class="form-check-input" /> CASH SALES</label
          ><br />
          <label class="form-check-label"style="   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 16px;"
            ><input type="checkbox" class="form-check-input" /> CHARGE SALES</label
          >
        </div>
      
        <div class="col-md-4 date-box ">
          <label for="date">Date:</label>
          <input type="text" />
        </div>
      </div>

        <div class="form-section">
          <h6 class="section-title">SOLD TO:<input type="text" /></h6>
        </div>
        <div class="form-section1">
          <p>Registered Name:<input type="text" /></p>
          <p>TIN:<input type="text" /></p>
          <p>Business Address :<input type="text" /></p>
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
              <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            </tr>
            <tr>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
            <td><input type="text" /></td>
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
                  <td><input type="text" /></td>
                  </tr>
                  <tr>
                    <td>VAT</td>
                  <td><input type="text" /></td>
                  </tr>
                  <tr>
                    <td>Zero-Rated Sales</td>
                  <td><input type="text" /></td>
                  </tr>
                  <tr>
                    <td>VAT-Exempt Sales</td>
                  <td><input type="text" /></td>
                  </tr>
                </tbody>
              </table>
              <div class="form-check ">
                <input type="checkbox" class="form-check-input" id="receivedAmount" />
                <label class="form-check-label" for="receivedAmount">
                  Received the amount of
                </label>
              </div>
              <hr >
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
                  <td><input type="text" /></td>
                  </tr>
                  <tr>
                    <td>Less: VAT</td>
                  <td><input type="text" /></td>
                  </tr>
                  <tr>
                    <td>Amount: Net of VAT</td>
                  <td><input type="text" /></td>
                  </tr>
                  <tr>
                    <td>Less: Discount (SC/PWD/NAAC/MOV/VBP)</td>
                  <td><input type="text" /></td>
                  </tr>
                  <tr>
                    <td>Add: VAT</td>
                  <td><input type="text" /></td>
                  </tr>
                  <tr>
                    <td>Less: Withholding Tax</td>
                  <td><input type="text" /></td>
                  </tr>
                  <tr>
                    <th>TOTAL AMOUNT DUE</th>
                    <th><input type="text" /></th>
                  </tr>
                </tbody>
              </table>
              <br>
              <p class="small mb-0" style="text-align: right;">
                <table class="table2 ">
                  <tbody>
                    <tr>
                      <td>     SC/PWD/NAAC/MOV
                        Solo Parent ID No.:</td>
                    <td style="border: 1px solid #000;"><input type="text" /></td>
                    </tr>
                    <tr>
                      <td>SC/PWD/NAAC/MOV
                        Signature:</td>
                    <td style="border: 1px solid #000;"><input type="text" /></td>
                    </tr>
                </table>
               
              </p>
            </div>
          </div>

          <div class="text-end mt-4 no-print">
            <button onclick="window.print()" class="btn btn-secondary">Print Invoice</button>
          </div>
     
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
