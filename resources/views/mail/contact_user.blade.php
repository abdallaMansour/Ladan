<style>
    body {
        background: #f7f1e8;
        padding: 20px
    }
    div {
        font-size: 20px;
        background: #f5e1c4;
        padding: 20px;
        border-radius: 15px;
        font-family: cursive;
    }

    .title {
        color: #6b5345;
    }

    .content {
        color: #a1511e
    }
</style>
<div>
    <p class="title">from : <span class="content">{{ $username }}</span></p>
    <p class="title">email : <span class="content">{{ $email }}</span></p>
    <p class="title">phone : <span class="content">{{ $phone }}</span></p>
    <p class="title">message : </p>
    <p class="content">{{ $user_message }}</p>
</div>
