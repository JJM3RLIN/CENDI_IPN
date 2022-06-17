<main>
  <div class=" items-center  mb-20 mt-20">
    <h1 class="font-bold text-center text-3xl mb-12">Recupera el PDF de la inscripción</h1>
    <p class="text-center mb-10">Para recuperar el pdf necesitas conocer el numero de boleta del niño inscrito y el curp del DerechoHabiente</p>
    <form action="/buscarPdfObtener" method="POST" id="formPdf">
      <div>
      <div class="flex justify-center items-center mb-3 font-medium">
      <label for="nombrePdf">Boleta del niño o niña:</label>
      </div>
      <div class="flex justify-center items-center ">
        <input type="text"  id="nombrePdf" class=" block mb-4 px-3 py-2 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" placeholder="Ej. 2021630376">
      </div>
      </div>
      <div>
      <div class="flex justify-center items-center mb-3 font-medium">
      <label for="curpPdf">CURP DerechoHabiente:</label>
      </div>
        <div class="flex justify-center items-center mb-10">
        <input type="text"  id="curpPdf" class="block mb-4 px-3 py-2 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500">
        </div>
        <div class="flex justify-center">
        <button class="bg-red-700 text-white py-3 px-8 rounded-md justify-center hover:bg-red-900 ease-in-out duration-150"type="submit">Recuperar</button>
        </div>
    </form>
  </div>
</main>