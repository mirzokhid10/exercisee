<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Navbar with PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php
          $menuItems = array(
            array('label' => 'Home', 'href' => '#'),
            array('label' => 'Link', 'href' => '#'),
            array(
              'label' => 'Dropdown',
              'href' => '#',
              'dropdown' => true,
              'dropdownItems' => array(
                array('label' => 'Action', 'href' => '#'),
                array('label' => 'Another action', 'href' => '#'),
                array('label' => 'Something else here', 'href' => '#')
              )
            ),
            array('label' => 'Disabled', 'href' => '#', 'disabled' => true)
          );

          foreach ($menuItems as $menuItem) {
            echo '<li class="nav-item">';
            
            if (isset($menuItem['dropdown']) && $menuItem['dropdown']) {
              echo '<a class="nav-link dropdown-toggle" href="' . $menuItem['href'] . '" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
              echo $menuItem['label'];
              echo '</a>';
              
              echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
              foreach ($menuItem['dropdownItems'] as $dropdownItem) {
                echo '<li><a class="dropdown-item" href="' . $dropdownItem['href'] . '">' . $dropdownItem['label'] . '</a></li>';
              }
              echo '</ul>';
            } else {
              echo '<a class="nav-link" href="' . $menuItem['href'] . '">' . $menuItem['label'] . '</a>';
            }
            
            echo '</li>';
          }
          ?>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>