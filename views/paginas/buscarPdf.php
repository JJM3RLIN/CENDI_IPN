<main>
    <h1>Recupera el Pdf de la inscripción</h1>
    <p>Para recuperar el pdf necesita conocer el numero de boleta del niño inscrito</p>
    <form action="/buscarPdfObtener" method="POST" id="formPdf">
      <div>
      <label for="nombrePdf">Boleta del niño o niña:</label>
        <input type="text" name="pdf" id="nombrePdf" class="block" placeholder="Ej. 2021630376">
      </div>
        <button type="submit">Recuperar</button>
    </form>
</main>