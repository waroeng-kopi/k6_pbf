<?php echo view('header') ?>

<main class="min-h-screen mx-5">
  <div class="flex flex-row justify-between my-5">
    <!-- add modal trigger -->
    <label class="flex flex-row my-auto items-center gap-2 px-4 py-3 rounded-lg bg-blue-700 text-white" for="add-modal">
      <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" fill="#ffffff"></path>
      </svg>
      Tambah
    </label>

    <!-- hidden toggle -->
    <input type="checkbox" id="add-modal" class="peer fixed appearance-none opacity-0" />
    <!-- modal -->
    <label for="add-modal" class="pointer-events-none invisible fixed inset-0 flex cursor-pointer items-center justify-center overflow-hidden overscroll-contain bg-slate-700/30 opacity-0 transition-all duration-200 ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 peer-checked:[&>*]:translate-y-0 peer-checked:[&>*]:scale-100">
      <!-- modal box -->
      <label class="absolute max-h-[calc(100vh - 5em)] h-fit max-w-lg scale-90 overflow-y-auto overscroll-contain rounded-md bg-white p-6 text-black shadow-2xl transition" for="">
        <h3 class="text-lg font-bold my-2">Tambah Data</h3>
        <form class="flex flex-col w-full gap-3" id="add_rent" method="post" action="<?= base_url('/rent-form') ?>">
          <!-- Input fields for namaMobil, penyewa, jamSewa -->
          <input class="rounded-md" type="text" name="namaMobil" placeholder="Nama Mobil" required>
          <input class="rounded-md" type="text" name="penyewa" placeholder="Penyewa" required>
          <input class="rounded-md" type="text" name="jamSewa" placeholder="Jam Sewa" required>
          <button class="rounded-md px-3 py-2 bg-blue-700 text-white w-fit mx-auto me-0" type="submit">Tambah</button>
        </form>
      </label>
    </label>
  </div>

  <div class="overflow-x-auto shadow-md sm:rounded-lg my-5">
    <table class="!w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="rent-table">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            Id
          </th>
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
                <?= $row->sewaId; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row->namaMobil; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row->penyewa; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row->jamSewa; ?>
              </td>
              <td class="px-6 py-4 flex flex-row gap-x-1">
                <!-- edit modal trigger -->
                <label class="font-medium py-2 px-3 bg-yellow-500 text-white rounded-lg hover:underline cursor-pointer" for="edit-modal<?php echo $row->sewaId; ?>">
                  Edit
                </label>

                <!-- hidden toggle -->
                <input type="checkbox" id="edit-modal<?php echo $row->sewaId; ?>" class="peer fixed appearance-none opacity-0" />
                <!-- modal -->
                <label for="edit-modal<?php echo $row->sewaId; ?>" class="pointer-events-none invisible fixed inset-0 flex cursor-pointer items-center justify-center overflow-hidden overscroll-contain bg-slate-700/30 opacity-0 transition-all duration-200 ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 peer-checked:[&>*]:translate-y-0 peer-checked:[&>*]:scale-100">
                  <!-- modal box -->
                  <label class="absolute max-h-[calc(100vh - 5em)] h-fit max-w-lg scale-90 overflow-y-auto overscroll-contain rounded-md bg-white p-6 text-black shadow-2xl transition" for="">
                    <h3 class="text-lg font-bold my-2">Edit Data</h3>
                    <form class="flex flex-col w-full gap-3" id="edit_rent" method="post" action="<?= base_url('/rent-edit/'.$row->sewaId) ?>">
                      <!-- Input fields for namaMobil, penyewa, jamSewa -->
                      <input class="rounded-md" type="text" name="namaMobil" placeholder="Nama Mobil" value="<?php echo $row->namaMobil; ?>" required>
                      <input class="rounded-md" type="text" name="penyewa" placeholder="Penyewa" value="<?php echo $row->penyewa ?>" required>
                      <input class="rounded-md" type="text" name="jamSewa" placeholder="Jam Sewa" value="<?php echo $row->jamSewa ?>" required>
                      <button class="rounded-md px-3 py-2 bg-green-600 text-white w-fit mx-auto me-0" type="submit">Edit</button>
                    </form>
                  </label>
                </label>

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

<script>
  document.getElementById('tambahButton').addEventListener('click', function() {
    document.getElementById('formWrapper').style.display = 'block';
  });
</script>
