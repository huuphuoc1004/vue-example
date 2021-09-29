<template>
	<div class="list-rendering">
		<ul>
            <li v-for="todo in listTodoComplete" :key="todo.index">
                {{todo.name}} - {{todo.isComplete}}
            </li>
        </ul>
        <span v-for="n in 10" :key="n">{{ n }}</span>
	</div>
</template>

<script>
    export default {
        data() {
            return {
                todos: [
                    {
                        name: 'to do 1',
                        isComplete: true
                    },
                    {
                        name: 'to do 2',
                        isComplete: false
                    },
                    {
                        name: 'to do 3',
                        isComplete: true
                    },
                ]
            }
        },
        computed: {
            listTodoComplete() {
                return this.todos.filter(item => item.isComplete);
            }
        }
    }
</script>

<style lang="scss" scoped>
    .list-rendering {
            margin: 10px auto;
            text-align: center;
            color: red;
        }
</style>