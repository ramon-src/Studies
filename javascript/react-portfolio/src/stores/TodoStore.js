import { EventEmitter } from "events";

class TodoStore extends EventEmitter {

    constructor() {
        super();
        this.todos = [
            {
                id: 113464613,
                text: "Go Shopping",
                complete: false
            },
            {
                id: 235684679,
                text: "Pay Water Bill",
                complete: false
            },
        ];
    }

    createTodo(text) {
        const id = Date.now();

        this.todos.push({
            id,
            text,
            complate: false,
        });
        this.emit("change");
    }

    getAll() {
        return this.todos;
    }
}

const todoStore = new TodoStore;

window.todoStore = todoStore;

export default todoStore;