<!-- Include the CSS file -->
<link rel="stylesheet" href="style.css">

<footer class="footer">
  <div class="footer-grid">
    <div class="footer-item">
      <h1>Contact</h1>
      <p>Telefoonnummer: <a href="tel:+31152602222">+31 15 260 22 22</a></p>
      <p>email:  <a href="mailto:info@mborijnland.nl">info@mborijnland.nl</p></a>
    </div>
    <div class="footer-item">
      <h1>Adres</h1>
      <p>groen van prinsterersingel 52 <br> 2805 TE gouda</p>
    </div>
    <div class="footer-item">
      <table>
        <tbody>
          <tr>
            <td><button>PRIVACHY</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</footer>


<style>
/* Footer styles */
footer {
  width: 100%;
  height: 300px;
  background: purple;
  margin: 70px 0 0;
  padding: 24px;
}

.footer-grid {
  margin: auto;
  width: 848px;
  max-width: 100%;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 0 24px;
}

.footer-item {
  flex: 1;
  color: #e6f4ed;
  padding: 0 24px;
}

.footer-item h1 {
  font-weight: normal;
  margin: 24px 0 36px;
}

.footer-item a,
.footer-item a:visited,
.footer-item a:active {
  color: #e6f4ed;
}

.footer-item table {
  border-spacing: 0;
  width: 100%;
}

.footer-item table,
.footer-item table tbody,
.footer-item table tr,
.footer-item table td {
  border: none;
  padding: 0;
}</style>