<main>
    <h1>Recupera el Pdf de la inscripción</h1>
    <p>Para recuperar el pdf necesitas conocer el numero de boleta del niño inscrito y el curp del DerechoHabiente</p>
    <form action="/buscarPdfObtener" method="POST" id="formPdf">
      <div>
      <label for="nombrePdf">Boleta del niño o niña:</label>
        <input type="text"  id="nombrePdf" class="block" placeholder="Ej. 2021630376">
      </div>
      <div>
      <label for="curpPdf">Curp DerechoHabiente:</label>
        <input type="text"  id="curpPdf" class="block">
      </div>
        <button type="submit">Recuperar</button>
    </form>
</main>