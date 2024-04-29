<?php echo view('header') ?>

  <main class="min-h-screen mx-5">
    <div class="flex flex-row justify-between my-5">
      <div class="flex flex-row my-auto items-center gap-2 px-4 py-3 rounded-lg bg-blue-700 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
          <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" fill="#ffffff"></path>
        </svg>
        Tambah
      </div>
      
      <!-- <form class="max-w-md">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Cari</label>
        <div class="relative">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
          </div>
          <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buku apa tuh man..." required />
          <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
        </div>
      </form> -->
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-5">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              Nama Mobil
            </th>
            <th scope="col" class="px-6 py-3">
              Penyewa
            </th>
            <th scope="col" class="px-6 py-3">
              Jam sewa
            </th>
            <th scope="col" class="px-6 py-3">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($sewa as $row): ?>
          <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
              <?= $row['sewaId'] ?>
            </th>
            <td class="px-6 py-4">
              <?= $row['namaMobil'] ?>
            </td>
            <td class="px-6 py-4">
              <?= $row['penyewa'] ?>
            </td>
            <td>
              <?= $row['jamSewa'] ?>
            </td>
            <td class="px-6 py-4 flex flex-row gap-x-1">
              <a href="#" class="font-medium py-2 px-3 bg-yellow-500 text-white rounded-lg hover:underline">Edit</a>
              <a href="#" class="font-medium py-2 px-3 bg-red-500 text-white rounded-lg hover:underline">Remove</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</div>

  </main>

  <?php echo view('footer') ?>