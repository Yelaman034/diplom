<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/children">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/children">St</a>
          </div>
          @if(auth()->user()->role == 'user')
          <ul class="sidebar-menu">
            <li class="menu-header">Хүүхэд</li>
            <li><a class="nav-link" href="/children"><i class="fas fa-baby"></i> <span>Хүүхэд</span></a></li>
            </ul>
            @endif
            @if(auth()->user()->role == 'admin')
            <ul class="sidebar-menu">
            <li class="menu-header">Вакцин нэмэх</li>
            <li><a class="nav-link" href="/vaccine"><i class="fas fa-syringe"></i> <span>Вакцин нэмэх</span></a></li>
            </ul>
            @endif

           
        </aside>
      </div>