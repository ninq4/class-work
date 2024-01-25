<header class="application__header header container">
    <a class="header__logo">Interiorqu.</a>
    <nav class="header__navbar navbar">
        <li class="navbar__item"><a href="#home" class="navbar__item-link">Home</a></li>
        <li class="navbar__item"><a href={{route('post.index')}} class="navbar__item-link">{{__('Посты')}}</a></li>
        <li class="navbar__item"><a href="{{route('category.index')}}" class="navbar__item-link">{{__('Категории')}}</a></li>
        <li class="navbar__item"><a href="{{route('product.index')}}" class="navbar__item-link">{{__('Продукты')}}</a></li>
        <button class="navbar__btn">Contact Us</button>
    </nav>
    <div class="header__menu-toggler">
        <span></span>
    </div>
</header>
