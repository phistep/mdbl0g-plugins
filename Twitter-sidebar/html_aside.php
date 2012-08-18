<?php if(TWITTER_USERNAME != ""){ ?>
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 3,
  interval: 30000,
  width: 'auto',
  height: 250,
  theme: {
    shell: {
      background: '#dbdbdb',
      color: '#000000'
    },
    tweets: {
      background: '#ffffff',
      color: '#000000',
      links: '#808080'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: true,
    behavior: 'all'
  }
}).render().setUser('<?php echo TWITTER_USERNAME; ?>').start();
</script>
<?php } ?>