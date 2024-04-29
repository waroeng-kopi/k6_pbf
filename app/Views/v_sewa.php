<?php echo view('header') ?>

<main class="min-h-screen mx-5">
  <div class="flex flex-row justify-between my-5">
    <div class="flex flex-row my-auto items-center gap-2 px-4 py-3 rounded-lg bg-blue-700 text-white">
      <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" fill="#ffffff"></path>
      </svg>
      Tambah
    </div>

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
        <?php if ($isi_sewa) : ?>
          <?php foreach ($isi_sewa as $row) : ?>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
              <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                <?= $row->namaMobil; ?>
              </td>
                            <td class="px-6 py-4">
                                <?= $row->penyewa; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $row->jamSewa; ?>
                            </td>
                            <td class="px-6 py-4 flex flex-row gap-x-1">
                                <a href="#" class="font-medium py-2 px-3 bg-yellow-500 text-white rounded-lg hover:underline">Edit</a>
                                <a href="#" class="font-medium py-2 px-3 bg-red-500 text-white rounded-lg hover:underline">Remove</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</main>

<?php echo view('footer') ?>
