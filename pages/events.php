<h2>Events</h2>

<div class="clear"></div>

<div class="container_12">
	<div class="grid_12">
		<table>
			<tbody>
				<?php
					for($i=1;$i<=7;$i++){
				?>
				<tr style="vertical-align: top;">
					<td width="20%"><img src="<?php echo $base_url; ?>public/images/gallery/<?php echo $i; ?>.jpg" class="img-thumbnail shadow"/></td>
					<td width="80%">
						<h3>Lorem ipsum sit amet dolor</h3>
						<h5><?php echo date('l, F jS Y @ h:ia'); ?></h5>
						<br/>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam adipiscing sagittis mauris, eget aliquet dui malesuada ac.
							Integer tincidunt nulla orci, in rutrum lacus adipiscing sed. Aenean eu sapien tempus, lacinia erat et, faucibus lorem.
							Sed tempus dapibus diam non pellentesque. Maecenas sollicitudin leo non interdum consequat.
							Integer tincidunt nulla orci, in rutrum lacus adipiscing sed.
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="2"><hr class="separator" /></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		<br/>
		<p class="important center">Check back often for more events, or <a href="#">subscribe to our mailing list!</a></p>
	</div>
</div>
		