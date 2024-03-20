<a href="#" onclick="shareOnFacebook()">
    <img src="facebook.png" alt="Facebook Logo" style="width: 30px;">
</a>
<script>
    function shareOnFacebook() {
        // Ersätt med din delnings-URL
        var shareUrl = 'https://ottiliaa.se/';
        // Öppna Facebook delningsfönster
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(shareUrl), 'facebook-share-dialog', 'width=626,height=436');
        return false;
    }
</script>
<a href="#" onclick="shareOnTwitter()">
    <img src="twitter.png" alt="Twitter Logo" style="width: 28px;">
  </a>
  <script>
    function shareOnTwitter() {
      // Ersätt med din delnings-URL
      var shareUrl = 'https://ottiliaa.se/'; // Ersätt med din faktiska URL
      // Öppna Twitter delningsfönster
      window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(shareUrl), 'twitter-share-dialog', 'width=626,height=436');
      return false;
    }
  </script>