<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K's Todolist</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            width: 100vw;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #A18AFF;
        }

        header {
            width: 100vw;
            height: 15vh;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .container-header {
            width: 80%;
            height: 15vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #ffffff;
            border-radius: 0 0 22px 22px;
            margin-bottom: 25px;
        }

        .title-text {
            align-items: center;
            text-align: center;
            color: #A18AFF;
        }

        .title-text h3 {
            color: #1c1c1c;
        }

        section {
            width: 100vw;
            height: 10vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-add {
            width: 840px;
            height: 75px;
            background: #ffffff;
            border-radius: 22px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            flex-direction: row;
            transition: 0.4s;
        }

        .img-add {
            width: 30px;
            max-width: 100%;
        }

        .card-add:hover {
            scale: 105%;
            background: #F9F8FD;
            transition: 0.4s;
        }

        .card-add:hover .in-add {
            background: #F9F8FD;
            transition: 0.4s;
        }

        .in-add {
            width: 85%;
            border: 0;
            background: #ffffff;
            transition: 0.4s;
            outline: none;
            font-size: 1.2em;
            font-weight: 700
        }

        .add {
            height: 100%;
            width: 10%;
            border-radius: 0 22px 22px 0;
            border: 0;
            background: #2CD0F3;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.4s;
        }

        .add:hover {
            transition: 0.4s;
            scale: 105%;
            cursor: pointer;
        }

        .todo-text {
            width: 100vw;
            height: auto;
            margin-top: 50px;
            display: flex;
            flex-direction: column;
        }

        .todo-text h1 {
            color: #ffffff;
        }

        .todo {
            width: 100vw;
            height: auto;
            display: flex;
            flex-direction: column;
        }

        .card-todo {
            margin-top: 25px;
            width: 840px;
            height: 86.4px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            flex-direction: row;
            box-shadow: #F9F8FD 0 3px;

        }

        .text-todo {
            font-weight: 700;
            font-size: 1.5em;
            margin-left: 30px;
            color: #ffffff;
            text-align: start;
        }

        .text-todo.active {
            text-decoration: line-through;
            color: #fefefe;
            font-weight: 500;
        }

        .right {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            width: 75%;
        }

        .left {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            width: 25%;
            height: 100%;
        }

        .check {
            width: 40%;
            height: 80%;
            margin-right: 5px;
            background: #FAC507;
            border: 0;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            color: #ffffff;
            transition: 0.4s;
        }

        .img-check {
            width: 40px;
            max-width: 100%;
        }

        .img-delete {
            width: 30px;
            max-width: 100%;
        }

        .check:hover {
            scale: 105%;
            transition: 0.4s;
        }

        .delete:hover {
            scale: 105%;
            transition: 0.4s;
        }

        .delete {
            width: 40%;
            height: 80%;
            margin-right: 10px;
            background: #FE859F;
            border: 0;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            transition: 0.4s;
        }

        @media screen and (max-width:910px) {
            .container-header {
                width: 100%;
            }

            .card-add {
                width: 80%;
            }

            .card-todo {
                width: 80%;
            }

            .check {
                width: 50%;
            }

            .delete {
                width: 50%;
            }

            .text-todo {
                font-size: 1.4em;
                margin-left: 15px;
            }
        }


        @media screen and (max-width:810px) {
            .add {
                width: 15%;
            }

            .in-add {
                width: 80%;
            }

            .right {
                width: 65%;
            }

            .left {
                width: 35%;
            }

            .check {
                width: 70%;
            }

            .delete {
                width: 70%;
            }

            .text-todo {
                font-size: 1.3em;
                margin-left: 15px;
            }
        }

        @media screen and (max-width:560px) {
            .add {
                width: 20%;
            }

            .in-add {
                width: 75%;

                font-size: 1.1em;
            }

            .right {
                width: 60%;
            }

            .left {
                width: 40%;
            }

            .check {
                width: 70%;
            }

            .delete {
                width: 70%;
            }

            .text-todo {
                font-size: 1em;
                margin-left: 10px;
            }
        }

        @media screen and (max-width:420px) {
            .add {
                width: 25%;
            }

            .in-add {
                width: 70%;

                font-size: 0.9em;
            }

            .right {
                width: 55%;
            }

            .left {
                width: 45%;
            }

            .check {
                width: 80%;
            }

            .delete {
                width: 80%;
            }

            .text-todo {
                font-size: 1em;
                margin-left: 15px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container-header">
            <div class="title-text">
                <h1>TODO's</h1>
            </div>
        </div>
    </header>

    <section>
        <div class="card-add">
            <input class="in-add" type="text" id="inadd" placeholder="Insert todays TODO's">
            <button onclick="addTask()" class="add"><img src="assets/Vector.png" alt="plus" class="img-add"></button>
        </div>
    </section>

    <section class="todo-text">
        <h1>Your TODO's</h1>
    </section>

    <section class="todo" id="todo"></section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            displayTasks();
        });

        function displayTasks() {
            const todoList = document.getElementById('todo');
            todoList.innerHTML = '';


            const api = 'backend.php';

            fetch(api).then(response => response.json()).then(data => {
                data.forEach(tasks => {
                    const card = document.createElement('div');
                    const right = document.createElement('div');
                    const left = document.createElement('div');
                    card.classList.add('card-todo');
                    right.classList.add('right');
                    left.classList.add('left');

                    const textTodo = document.createElement('p');
                    textTodo.classList.add('text-todo');
                    textTodo.textContent = tasks.task_name;
                    if (tasks.completed === '1') {
                        textTodo.classList.toggle('active');
                    };

                    left.innerHTML =
                        `<button class="check" onclick="toggleTask(${tasks.id})" type="button"><img src="assets/check.png" alt="plus" class="img-check"></button> <button class="delete" onclick="deleteTask(${tasks.id})" type="button"><img src="assets/delete.png" alt="plus" class="img-delete"></button>`


                    todoList.appendChild(card);
                    card.appendChild(right);
                    card.appendChild(left);
                    right.appendChild(textTodo);
                });
                console.log(data);
            });
        };

        function addTask() {
            const taskInput = document.getElementById('inadd');
            const task = taskInput.value.trim();

            if (task !== '') {
                fetch('backend.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            task
                        }),
                    })
                    .then(() => {
                        taskInput.value = '';
                        displayTasks();
                    });
            }
        }

        function toggleTask(id) {
            fetch(`backend.php?id=${id}`, {
                    method: 'PUT',
                })
                .then(() => displayTasks());
        }

        function deleteTask(id) {
            fetch(`backend.php?id=${id}`, {
                    method: 'DELETE',
                })
                .then(() => displayTasks());
        }
    </script>
</body>

</html>