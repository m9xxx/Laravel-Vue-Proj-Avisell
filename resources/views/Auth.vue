<template>
    <form class="centered-window">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
                >Email address</label
            >
            <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
            />
            <div id="emailHelp" class="form-text">
                We'll never share your email with anyone else.
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
                >Password</label
            >
            <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
            />
        </div>
        <div class="mb-3 form-check">
            <input
                type="checkbox"
                class="form-check-input"
                id="exampleCheck1"
            />
            <label class="form-check-label" for="exampleCheck1"
                >Check me out</label
            >
        </div>
        <router-link to="/test" type="submit" class="btn btn-primary"
            >Submit</router-link
        >
    </form>
</template>

<style>
body {
    background-color: #1a73e8;
}
.input_cities {
    background-color: #ffffff; /* Green */
    height: 10%;
    width: 10%;
    border: none;
    color: rgb(0, 0, 0);
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.input {
    background-color: #ffffff; /* Green */
    border: none;
    color: rgb(0, 0, 0);
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.button {
    background-color: #f25122; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 8px;
}

.centered-window {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: auto;
}

select,
input,
button {
    display: block;
    margin: 0.5em 0;
    font-size: 15px;
}

input[disabled] {
    color: #999;
}

p {
    color: red;
}
</style>
