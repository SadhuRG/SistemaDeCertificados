<div>

  <div class="mx-20 my-10 bg-indigo-100 rounded-lg">
    <table class=" w-full border-2 shadow-md rounded-lg border-indigo-300">
      <thead class=" rounded-l">
        <th class="border border-indigo-300 rounded-lg uppercase text-gray-700 px-3 py-1" > Id </th>
        <th class="border border-indigo-300 rounded-lg uppercase text-gray-700 px-3 py-1">Nombre</th>
        <th class="border border-indigo-300 rounded-lg uppercase text-gray-700 px-3 py-1">Tipo</th>
        <th class="border border-indigo-300 rounded-lg uppercase text-gray-700 px-3 py-1"> Descripción </th>
      </thead>

      <tbody>

        @foreach($datosGrupos as $group)
        <tr class="text-center  border-b-indigo-300">
          <td> {{$group['id'] }}</td>
          <td> {{$group['nombre'] }}</td>
          <td> {{$group['tipo'] }}</td>
          <td> {{$group['descripcion'] }}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>