<style>
    .wrapper-verify {
        width: 100vh;
        height:100vh;
        background-color:red;
    }
</style>

<div class="wrapper-verify">
    <a href="{{ route("verify", base64_encode($user['id'])) }}">Active</a>
</div>
