<script>
    document.getElementById('login-btn').addEventListener('click', function() {
        document.getElementById('login-popup').classList.remove('hidden');
    });
    document.getElementById('login-popup-close').addEventListener('click', function() {
        document.getElementById('login-popup').classList.add('hidden');
    });
</script>
<script>
document.getElementById('register-btn').addEventListener('click', function() {
    document.getElementById('register-popup').classList.remove('hidden');
});
document.getElementById('register-popup-close').addEventListener('click', function() {
    document.getElementById('register-popup').classList.add('hidden');
});
</script>

</html>
