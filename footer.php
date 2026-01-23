
<?php
$home = esc_url(home_url('//'));
$privacy_policy = esc_url(home_url('/privacy-policy/'));
?>

<footer class="l-footer">

    <div class="l-footer__copylight l-copyright">
        <p class="l-copyright__text">Copyright ©︎ <?php echo date('Y'); ?> Ryo Hiratoko</p>
    </div>
</footer>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>

</html>