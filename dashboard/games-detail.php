<?php include('../config.php'); 

$game = isset($_GET['id']) ? $_GET['id'] : '';
  $data = null;
  if ($games->num_rows > 0) {
      while ($row = $games->fetch_assoc()) {
          if ($row['nama'] === $game) {
              $data = $row;
              break;
          }
      }
  }
?>

<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Arkara Bhayana</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Arkara Bhayana | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
        integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="./css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />
    <!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
        integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous" />
    <style>
    /* Teks Menu besar dan bold dengan bayangan */
    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        /* Bayangan teks */
    }

    /* Teks Menu khusus, ukuran lebih besar dan bold */
    h2.text-shadow {
        font-size: 3rem;
        /* Ukuran teks lebih besar */
        font-weight: bold;
        /* Teks tebal */
    }

    /* Tombol dengan bayangan */
    .btn.text-shadow {
        font-weight: bold;
        /* Tombol tebal */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        /* Bayangan tombol */
    }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        <?php include('./navbar.php'); ?>

        <!--end::Header-->
        <!--begin::Sidebar-->

        <?php include('./sidebar.php'); ?>

        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Games "<?php echo htmlspecialchars($_GET['id']); ?>"</h3>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <!-- Banner Section -->
                        <div class="col-12">
                            <div class="position-relative text-center">
                                <!-- Gambar dengan Overlay Hitam -->
                                <div class="position-relative">
                                    <?php $banners = explode(',', $data['banner']); ?>
                                    <img src="../public/images/banner/<?php echo htmlspecialchars(trim($banners[0])); ?>"
                                        alt="Banner" class="img-fluid w-100"
                                        style="max-height: 600px; object-fit: cover;">
                                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
                                </div>

                                <!-- Button Section -->
                                <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
                                    <!-- Teks Menu dengan style tambahan -->
                                    <h2 class="text-white mb-4 font-weight-bold text-shadow">MENU</h2>

                                    <!-- Daftar Tombol dengan style tambahan -->
                                    <div class="d-flex flex-column gap-2 align-items-center">
                                        <a href="data-wish.php?id=<?php echo urlencode($_GET['id']); ?>"
                                            class="btn btn-primary w-50 text-shadow">Wish</a>
                                        <a href="data-characters.php?id=<?php echo urlencode($_GET['id']); ?>"
                                            class="btn btn-primary w-50 text-shadow">Characters</a>
                                        <a href="data-map.php?id=<?php echo urlencode($_GET['id']); ?>"
                                            class="btn btn-primary w-50 text-shadow">Map</a>
                                        <a href="data-weapons.php?id=<?php echo urlencode($_GET['id']); ?>"
                                            class="btn btn-primary w-50 text-shadow">Weapons</a>
                                        <a href="data-artifacts.php?id=<?php echo urlencode($_GET['id']); ?>"
                                            class="btn btn-primary w-50 text-shadow">Artifacts</a>
                                        <a href="data-elements.php?id=<?php echo urlencode($_GET['id']); ?>"
                                            class="btn btn-primary w-50 text-shadow">Elements</a>
                                        <a href="data-try-party.php?id=<?php echo urlencode($_GET['id']); ?>"
                                            class="btn btn-primary w-50 text-shadow">Try Party</a>
                                        <a href="data-tgc-genshin.php?id=<?php echo urlencode($_GET['id']); ?>"
                                            class="btn btn-primary w-50 text-shadow">TGC Genshin</a>
                                        <a href="data-world.php?id=<?php echo urlencode($_GET['id']); ?>"
                                            class="btn btn-primary w-50 text-shadow">world</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->
        <?php include('./footer.php'); ?>
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)-->
    <!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <!--end::Required Plugin(Bootstrap 5)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <script src="./js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)-->
    <!--begin::OverlayScrollbars Configure-->
    <script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!-- OPTIONAL SCRIPTS -->
    <!-- sortablejs -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
        integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script>
    <!--end::Script-->
</body>
<!--end::Body-->

</html>