<script setup>
import { ref, computed } from "vue";

const flightType = ref("one-way flight");
const departureDate = ref(dateToString(new Date()));
const returnDate = ref(departureDate.value);

const isReturn = computed(() => flightType.value === "return flight");

const canBook = computed(
    () =>
        !isReturn.value ||
        stringToDate(returnDate.value) > stringToDate(departureDate.value)
);

function book() {
    alert(
        isReturn.value
            ? `Вы забронировали вылет на ${departureDate.value} и прилет обратно на ${returnDate.value}.`
            : `Вы забронировали билет в одну сторону на ${departureDate.value}.`
    );
}

function stringToDate(str) {
    const [y, m, d] = str.split("-");
    return new Date(+y, m - 1, +d);
}

function dateToString(date) {
    return (
        date.getFullYear() +
        "-" +
        pad(date.getMonth() + 1) +
        "-" +
        pad(date.getDate())
    );
}

function pad(n, s = String(n)) {
    return s.length < 2 ? `0${s}` : s;
}
</script>

<template>
    <div class="centered-window">
        <!-- <span> -->

        <!-- </span> -->
        <!-- <select v-model="flightType">
            <option value="one-way flight">Билет в один конец</option>
            <option value="return flight">Билет туда и обратно</option>
        </select> -->
        <input placeholder="Откуда" class="input_cities" />
        <input placeholder="Куда" class="input_cities" />
        <input placeholder="Когда" class="input" type="date" />
        <input placeholder="Обратно" class="input" type="date" />

        <!-- <input
            class="input"
            type="date"
            v-model="returnDate"
            :disabled="!isReturn"
        /> -->

        <button class="button" :disabled="!canBook" @click="book">
            Найти билеты
        </button>

        <p>
            {{
                canBook
                    ? ""
                    : "Дата обратного билета должна быть после даты вылета"
            }}
        </p>
    </div>
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
