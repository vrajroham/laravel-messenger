<div class="messenger">
    <a href="#" style="color:#0a6ac9"><i id="messenger-btn" class="fa fa-envelope fa-2x"></i></a>
</div>
<div class="chatbox hidden" id="messenger-chatbox">
    <div class="header">
        {{ $user }}
    </div>
</div>
<script>
    const btn = document.getElementById('messenger-btn');
    const element = document.getElementById('messenger-chatbox');
    btn.addEventListener('click', event => element.classList.toggle('hidden'));
</script>
