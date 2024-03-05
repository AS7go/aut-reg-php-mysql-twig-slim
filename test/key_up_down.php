<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Пример страницы с кнопками "Вверх" и "Вниз"</title>
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

    /* Кнопка пролистывания вверх */
    #scroll-top {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 100;
      padding: 10px 20px;
      border-radius: 5px;
      background-color: #DCDCDC;
      color: #333;
      cursor: pointer;
      opacity: 1;
      transition: opacity 0.3s ease-in-out;
    }

    #scroll-top.hidden {
      opacity: 0;
    }

    /* Кнопка пролистывания вниз */
    #scroll-bottom {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 100;
      padding: 10px 20px;
      border-radius: 5px;
      background-color: #DCDCDC;
      color: #333;
      cursor: pointer;
      opacity: 1;
      transition: opacity 0.3s ease-in-out;
    }

    #scroll-bottom.hidden {
      opacity: 0;
    }

    /* Анимация наведения */
    #scroll-top:hover,
    #scroll-bottom:hover {
      background-color: #ccc;
    }
  </style>
</head>

<body>
  <div id="content">
    <h1>Пример страницы</h1>

    <p>**На этой странице есть кнопки "Вверх" и "Вниз", которые появляются при прокрутке страницы.**</p>

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

  <button id="scroll-top">Вгору</button>
  <button id="scroll-bottom">Вниз </button>

  <script>
    const scrollTopButton = document.getElementById('scroll-top');
    const scrollBottomButton = document.getElementById('scroll-bottom');

    window.addEventListener('scroll', () => {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      const scrollHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight);
      const isNearTop = scrollTop < window.innerHeight / 2;
      const isNearBottom = (scrollHeight - scrollTop) < window.innerHeight;

      if (isNearTop) {
        scrollTopButton.classList.add('hidden');
      } else {
        scrollTopButton.classList.remove('hidden');
      }

      if (isNearBottom) {
        scrollBottomButton.classList.add('hidden');
      } else {
        scrollBottomButton.classList.remove('hidden');
      }
    });

    scrollTopButton.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    scrollBottomButton.addEventListener('click', () => {
      window.scrollTo({
        top: document.body.scrollHeight,
        behavior: 'smooth'
      });
    });
  </script>
</body>

</html>