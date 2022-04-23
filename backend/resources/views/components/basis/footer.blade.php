<!---PCフッターここから--->
<footer class="w-full flex justify-center items-center flex-col bg-bg-sub text-center text-sm md:h-28 h-auto">
    <div class="flex md:gap-8 gap-2 justify-center md:mb-2 md:flex-row flex-col my-4">
        <a href='{{env("FRONTEND_URL") }}/releaseNote'>リリースノート</a>
        <a href='{{env("FRONTEND_URL") }}/aboutThisSite'>このサイトについて</a>
        <a href='{{env("FRONTEND_URL") }}/'>トップ</a>
        <a href='{{env("FRONTEND_URL") }}/terms'>利用規約</a>
        <a href='{{env("FRONTEND_URL") }}/privacyPolicy'>プライバシーポリシー</a>
        <a href='{{env("FRONTEND_URL") }}/credit'>クレジット</a>
        <a href='https://forms.gle/BAVWXCdSSxdYmABXA'>お問い合わせ(GoogleFormへ)</a>
    </div>
    <a href='https://github.com/Usuyuki/api.kotohazi.me' target="_blank" rel="noopener" class="mb-4">GitHub</a>

    <p class="copyright">Copyright (c) {{date("Y")}} usuyuki</p>
</footer>
<!---PCフッターここまで--->
