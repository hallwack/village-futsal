import { render } from "solid-js/web";

const bookForm = () => {
    return <div>OOHHH GOD IS WORK!!!</div>;
};

const form = document.getElementById("bookingCheck");
form.addEventListener("submit", (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    axios
        .post("/booking-check", formData, {
            headers: {
                "Content-Type": "multipart/form-data",
            },
        })
        .then((res) => {
            const { data, timePart, getDate, hourNow, timeNow } = res.data;
            console.log(timePart);
            Object.keys(timePart).forEach((value) => {
                console.log(value);
            });
        })
        .catch((err) => {
            alert(err);
        });
});

render(bookForm, document.getElementById("check-solid"));
