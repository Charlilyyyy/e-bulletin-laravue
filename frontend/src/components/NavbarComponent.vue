<template>
    <nav>
        <a class="active" href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </nav>
</template>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

nav {
    overflow: hidden;
    background-color: #4493c4;
}

nav a {
    float: left;
    display: block;
    color: #114483;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

nav a:hover {
    background-color: #dadba0;
    color: black;
}

nav a.active {
    background-color: #bbdc2b;
    color: white;
}
</style>