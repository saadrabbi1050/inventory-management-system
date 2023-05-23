<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.html">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a  href="{{route('product.create')}}">
          <i class="bi bi-circle"></i><span>Create</span>
        </a>
      </li>
      <li>
        <a  href="{{route('product.index')}}">
          <i class="bi bi-circle"></i><span>List</span>
        </a>
      </li>

    </ul>
  </li><!-- End Forms Nav -->




  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a  href="{{route('category.create')}}">
          <i class="bi bi-circle"></i><span>Create</span>
        </a>
      </li>
      <li>
        <a  href="{{route('category.index')}}">
          <i class="bi bi-circle"></i><span>List</span>
        </a>
      </li>

    </ul>
  </li><!-- End Forms Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav3" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Stores</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a  href="{{route('store.create')}}">
          <i class="bi bi-circle"></i><span>Create</span>
        </a>
      </li>
      <li>
        <a  href="{{route('store.index')}}">
          <i class="bi bi-circle"></i><span>List</span>
        </a>
      </li>

    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav4" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Racks</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a  href="{{route('rack.create')}}">
          <i class="bi bi-circle"></i><span>Create</span>
        </a>
      </li>
      <li>
        <a  href="{{route('rack.index')}}">
          <i class="bi bi-circle"></i><span>List</span>
        </a>
      </li>

    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-box" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Boxes</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-box" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a  href="{{route('box.create')}}">
          <i class="bi bi-circle"></i><span>Create</span>
        </a>
      </li>
      <li>
        <a  href="{{route('box.index')}}">
          <i class="bi bi-circle"></i><span>List</span>
        </a>
      </li>

    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-supplier" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>suppliers</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-supplier" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a  href="{{route('supplier.create')}}">
          <i class="bi bi-circle"></i><span>Create</span>
        </a>
      </li>
      <li>
        <a  href="{{route('supplier.index')}}">
          <i class="bi bi-circle"></i><span>List</span>
        </a>
      </li>
      </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-product_transjection" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Product_transjection</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-product_transjection" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a  href="{{route('product_transjection.create')}}">
          <i class="bi bi-circle"></i><span>Create</span>
        </a>
      </li>
      <li>
        <a  href="{{route('product_transjection.index')}}">
          <i class="bi bi-circle"></i><span>List</span>
        </a>
      </li>
      </ul>
  </li>







  </ul>

  </aside>