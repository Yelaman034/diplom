<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/children">Child</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/children">Ch</a>
          </div>
          @if(auth()->user()->role == 'user')
          <ul class="sidebar-menu">
            <li class="menu-header">Хүүхэд</li>
            <li><a class="nav-link" href="/children"><i class="fas fa-baby"></i> <span>Хүүхэд</span></a></li>
            <li class="menu-header">Вакцинууд</li>
            <li><a class="nav-link" href="/vaccines"><i class="fas fa-syringe"></i> <span>Вакцинууд</span></a></li>

            <li class="menu-header">Миний бүртгэл</li>
            <li><a class="nav-link" href="/profile"><i class="fas fa-user"></i> <span>Миний бүртгэл</span></a></li>
            
            </ul>
            @endif
            @if(auth()->user()->role == 'admin')
            <ul class="sidebar-menu">
            <li class="menu-header">Вакцин нэмэх</li>
            <li><a class="nav-link" href="/vaccine"><i class="fas fa-syringe"></i> <span>Вакцин нэмэх</span></a></li>
            </ul>
            <ul class="sidebar-menu">
            <li class="menu-header">Хэрэглэгчид</li>
            <li><a class="nav-link" href="/consumer"><i class="fas fa-user"></i> <span>Хэрэглэгчид</span></a></li>
            </ul>
            @endif

           
        </aside>
      </div>