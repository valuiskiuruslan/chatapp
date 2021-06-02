<template>
    <div class="relative h-10 m-1">
        <div class="grid grid-cols-6 message-wrapper">
            <input
                type="text"
                v-model="message"
                @keyup.enter="sendMessage()"
                placeholder="Say something..."
                class="message-field col-span-5 outline-none p-1"
            />
            <button
                @click="sendMessage()"
                class="place-self-end bg-gray-500 hover:bg-blue-700 p-1 mt-1 rounded text-white"
            >
                Send
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "inputMessage",
        props: ['room'],
        data: function () {
            return {
                message: '',
            };
        },
        methods: {
            sendMessage() {
                if (!this.message) {
                    return false;
                }

                axios.post('/chat/room/' + this.room.id + '/message', {
                    message: this.message
                })
                    .then(response => {
                        if (response.status === 201) {
                            this.message = '';
                            this.$emit('messagesent');
                        }
                    })
                    .catch(error => {
                        console.log(error);
                    })
            }
        }
    }
</script>

<style scoped>
    .message-wrapper {
        border-top: 1px solid #e6e6e6;
    }
    .message-field,
    .message-field:focus {
        outline: none;
        border: none;
        --tw-ring-color: transparent
    }
</style>
