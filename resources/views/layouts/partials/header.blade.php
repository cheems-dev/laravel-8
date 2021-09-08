 <header>
   <ul>
     <li>
       <a
         href="{{ route('home') }}"
         class="{{ request()->routeIs('home') ? 'isActive' : '' }}"
       >Index
       </a>
     </li>
     <li>
       <a
         href="{{ route('cursos.index') }}"
         class="{{ request()->routeIs('cursos.*') ? 'isActive' : '' }}"
       >Cursos</a>
     </li>
     <li>
       <a
         href="{{ route('nosotros') }}"
         class="{{ request()->routeIs('nosotros') ? 'isActive' : '' }}"
       >Nosotros</a>
     </li>
     <li>
       <a
         href="{{ route('email.show') }}"
         class="{{ request()->routeIs('email.show') ? 'isActive' : '' }}"
       >Contactanos</a>
     </li>
   </ul>
 </header>
