<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Waroeng Mobil | <?= $title ?></title>
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets') ?>/logo.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
  <script src="<?= base_url() ?>js/float-panel.js"></script>
  <script src="<?= base_url() ?>js/app.js"></script>
</head>
<body>
  <!-- Navbar -->
  <nav class="bg-blue-50 border-gray-200 sticky top-0 z-20">
    <div class="max-w-screen flex flex-wrap items-center justify-between lg:px-10 px-7 py-4">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="<?= base_url('assets') ?>/logo.png" class="h-10" alt="Flowbite Logo" />
        <span class="font-sans self-center font-semibold text-sm antialiased whitespace-nowrap dark:text-white">Waroneg Mobil</span>
      </a>

      <div class="flex flex-row gap-3">
        <a class="hover:text-blue-700" href="/sewa">sewa mobil</a>
        <a class="hover:text-blue-700" href="/mobil">daftar mobil</a>
        <a class="hover:text-blue-700" href="/login">login</a>
      </div>
    </div>
  </nav>