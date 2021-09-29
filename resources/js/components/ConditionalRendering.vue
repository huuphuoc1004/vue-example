<template>
    <div class="conditional-rendering">
        <div class="block-1" v-if="currentBlock == 1">
            This is block 1
        </div>
        <div class="block-2" v-else-if="currentBlock == 2">
            This is block 2
        </div>
        <div class="block-3" v-else>
            This is block 3
        </div>
        <p><button @click="showBlock(1)">Block 1</button></p>
        <p><button @click="showBlock(2)">Block 2</button></p>
        <p><button @click="showBlock(3)">Block 3</button></p>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isActive: true,
                currentBlock : 1,
            }
        },
        methods: {
            showBlock(number) {
                this.currentBlock = number;
            }
        }

    }
</script>

<style lang="scss" scoped>
    .conditional-rendering {
        margin: 10px auto;
        text-align: center;
    }

    .conditional-rendering .block-1{
        color: rgb(30, 30, 182);
    }

    .conditional-rendering .block-2{
        color: red;
    }

    .conditional-rendering .block-3{
        color: green;
    }

</style>