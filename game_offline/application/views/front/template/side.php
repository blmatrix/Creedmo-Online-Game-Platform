<div class="column250px">
	<div class="Sub_Vmenu">
		<ul>
			<li <?php if ($side_index == 'profile'):?> class="nav_active" <?php endif;?> >
				<a href="<?= site_url('profile') ?>"><?= lang('my_profile') ?></a>
			</li>
			<li <?php if ($side_index == 'e_wallet'):?> class="nav_active" <?php endif;?>>
				<a href="<?= site_url('e_wallet') ?>"><?= lang('e_wallet') ?></a>
			</li>
			<li <?php if ($side_index == 'comp'):?> class="nav_active" <?php endif;?>>
				<a href="<?= site_url('comp') ?>"><?= lang('comp_point') ?></a>
			</li>
			<li <?php if ($side_index == 'coupons'):?>class="nav_active" <?php endif;?>>
				<a href="<?= site_url('coupons') ?>"><?= lang('coupons') ?></a>
			</li>
			<li <?php if ($side_index == 'affiliate'):?>class="nav_active" <?php endif;?>>
				<a href="<?= site_url('affiliate') ?>"><?= lang('affiliate') ?></a>
			</li>
		</ul>
	</div>
</div>

