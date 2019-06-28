<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session('username') }}</span>
          <img class="img-profile rounded-circle" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8PEhUPEg8VFRUVFRUVFRUVFRUVFRUVFRUXFxUVFRUYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDQ0NDg0NDysZFRktNys3LTcrKysrKy0tKy0rKystKysrKysrLSsrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4AMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAAAQIH/8QAFxABAQEBAAAAAAAAAAAAAAAAAAERMf/EABUBAQEAAAAAAAAAAAAAAAAAAAAB/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A4yVIoiCgIAAigIKAgoKgoCC4AkBcBABAVAAAQ1agqqloIqxFAQUAABFQAAAAAAAAAEBSiQBUBQABKqAAoiqgCgAioAAAAAAAigKIKCCoAAAqKIzQKKAACoI1FSKAAAACAAAAAAAAQAUABBQEAEEVBQAAAGwBAAAEoCxAAEBQAAAAAAAEVAUAERUFEaQEUAaUBBBQTQAKFAVAAAAFQAAAoUAAEFQAVBRFAQVAbAEAQAVAAANAAAAAAAAhoAAAgAAAAIKqKCNAAAACAAAAAAAAAoAIAACKACAqLqAAgqhKCKoACAoAIAAAAAAUAAAAEBRAAAAAURQAARoAAQFFSAAAAEAAEAARQAQUEFQCgAAgoACooDQIIACgAgCCqAAAIAAAAAAioCqgCAUFRUAFQEaUgKgAAAFSgAoAAgAKIioCqgAAAigAACAgLAQG1AEoAAAIACggAAAAAFAAAAAAARUAMFBkWgNgAgAAgAACoAAAAAAICgAAAAAIoCAQFSquAtIAJQAQAEUAAARaAAAItACoAEABaQAEAFvAAI1AB//Z">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>