<template>
    <div class="relative h-10 m-1">
        <div class="grid grid-cols-6 border-solid border-1 border-light-gray-500">
            <input
                type="text"
                v-model="message"
                @keyup="sendMessage()"
                placeholder="Say something..."
                class="col-span-5 outline-none p-1"
            />
        </div>
    </div>
</template>

<script>
    export default {
        name: "inputMessage",
        props: ['room']
    }
</script>

<style scoped>

</style>
