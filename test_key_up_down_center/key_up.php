<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Пример страницы с кнопкой "Вверх"</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    #content {
      padding: 20px;
      max-width: 800px;
      margin: 0 auto;
    }

    /* test3 */
    #scroll-top3 {
      position: fixed;
      bottom: 560px;
      right: 20px;
      z-index: 100;
      display: block;
      border: none;
      border-radius: 5px;
      padding: 10px;
      background-color: #DCDCDC;
      color: #000;
      cursor: pointer;
    }

    /* test2 */
    #scroll-top2 {
      position: fixed;
      bottom: 380px;
      right: 20px;
      z-index: 100;
      display: block;
      border: none;
      border-radius: 5px;
      padding: 10px;
      background-color: #696969;
      color: #fff;
      cursor: pointer;
    }

    /* test1 */
    #scroll-top1 {
      position: fixed;
      bottom: 200px;
      right: 20px;
      z-index: 120;
      display: block;
      border: none;
      border-radius: 5px;
      padding: 10px;
      background-color: #808080;
      color: #fff;
      cursor: pointer;
    }

    /* Кнопка пролистывания вверх */
    #scroll-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 100;
      display: none;
      border: none;
      border-radius: 5px;
      padding: 10px;
      /* background-color: #ccc; */
      background-color: #DCDCDC;
      color: #000;
      cursor: pointer;
    }

    #scroll-top.active {
      display: block;
    }

    /* Анимация наведения */
    #scroll-top:hover {
      background-color: #ccc;
    }

  </style>
</head>

<body>
  <div id="content">
    <h1>Пример страницы</h1>

    <p>**На этой странице есть кнопка "Вверх", которая появляется при прокрутке страницы вниз.**</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Fusce viverra, risus eget aliquam tincidunt, lectus leo ultricies nibh, eget ullamcorper neque quam ac libero. Donec ullamcorper nisl sit amet lectus viverra, eu tincidunt massa tristique. Nulla facilisi. Nam euismod, risus eget ultricies ultricies, mauris lectus tincidunt neque, eget laoreet nibh mi sed velit. Sed euismod orci sit amet eros ultricies, eget hendrerit neque ultricies. Maecenas euismod risus ac tortor convallis, eget ultrices lectus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <!-- Ваш контент здесь -->
  </div>

  <!-- Додайте кнопку "Вверх" -->
  <button id="scroll-top3">Вверх</button>
  <button id="scroll-top2">Вверх</button>
  <button id="scroll-top1">Вверх</button>
  <button id="scroll-top">Вверх</button>

  <script>
    const scrollTopButton = document.getElementById('scroll-top');

    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 100) {
        scrollTopButton.classList.add('active');
      } else {
        scrollTopButton.classList.remove('active');
      }
    });

    scrollTopButton.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  </script>
</body>

</html>