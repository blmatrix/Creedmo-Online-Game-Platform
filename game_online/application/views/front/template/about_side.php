<div class="column250px">
	<div class="Sub_Vmenu">
		<ul>
			<li <?php if ($side_index == 'about_us'):?> class="nav_active" <?php endif;?> >
				<a href="<?= site_url('about_us') ?>"><?= lang('about_us') ?></a>
			</li>
			<li <?php if ($side_index == 'help'):?> class="nav_active" <?php endif;?>>
				<a href="<?= site_url('help') ?>"><?= lang('help')?></a>
			</li>
			<li <?php if ($side_index == 'terms_of_service'):?>class="nav_active" <?php endif;?>>
				<a href="<?= site_url('terms_of_service') ?>"><?= lang('terms_of_service') ?></a>
			</li>
			<li <?php if ($side_index == 'privacy_policy'):?>class="nav_active" <?php endif;?>>
				<a href="<?= site_url('privacy_policy') ?>"><?= lang('privacy_policy') ?></a>
			</li>
			<li <?php if ($side_index == 'contact_us'):?>class="nav_active" <?php endif;?>>
				<a href="<?= site_url('contact_us') ?>"><?= lang('contact_us') ?></a>
			</li>
		</ul>
	</div>
</div>

