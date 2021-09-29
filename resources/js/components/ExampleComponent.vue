<template>
    <div class="example-component">
        This is my first component
        <p><a href="#">{{ message }}</a></p>
        <p><a href="#">{{ message2 }}</a></p>
        <div><button v-on:click="textUpper(message)">Click Upper!!!</button></div>
        <div><button v-on:click="textLower(message)">Click Lower!!!</button></div>
        {{reverseMessage}}
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message : 'This is a message',
                message2 : 'This is a message 1232'
            }
        },
        methods: {
            textUpper(text) {
                this.message = text.toUpperCase();
            },
            textLower(text) {
                this.message = text.toLowerCase();
            },
            clickMe() {
                this.message2 = 'You click me!!!';
            }
        },
        computed: {
            reverseMessage() {
                return this.message.split('').reverse().join('');
            }
        },
        watch: {
            message() {
                console.log('Message change!!!');
            },
            reverseMessage() {
                console.log('ReverseMessage changed');
            }
        }

    }
</script>

<style lang="scss" scoped>
    .example-component {
        margin: 10px auto;
        text-align: center;
        color: red;
    }
</style>