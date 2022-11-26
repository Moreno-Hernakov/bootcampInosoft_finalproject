<template>
    <div
        class="pl-10 w-full h-16 bg-slate-100 shadow-sm flex navbar text-gray-500 dark:bg-[#242526] dark:text-white flex justify-end px-10 fixed left-0">
        <div class="flex items-center gap-3 font-medium">
            <div class="border-r-2 border-gray-500 flex items-center gap-3 px-5">
                <i class='bx bxs-bell'></i>
                <p class="text-black font-semibold">9875</p>
                <i class='bx bx-question-mark font-bold text-white bg-teal-400 p-0.5 rounded-full mx-4' ></i>
            </div>
            <h1>{{ greetings }}, {{ user.name }}</h1>
            <img src="../assets/01.jpg" class="w-12 h-12 rounded-full">
        </div>
    </div>

</template>

<script>
export default {
    name: "Navbar",
    computed: {
        user() {
            return JSON.parse(localStorage.getItem('user'));
        },
        greetings() {
            let date = new Date();
            let hour = date.getHours();
            if (hour < 12) {
                return "Good Morning";
            } else if (hour >= 12 && hour <= 15) {
                return "Good Afternoon";
            } else if (hour >= 15 && hour <= 18) {
                return "Good Evening";
            } else {
                return "Good Night";
            }
        }
    }
};

</script>