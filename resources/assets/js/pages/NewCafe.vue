<template>
	<div class="page">
		<form>
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-12 medium-12 small-12 cell">
						<label>Name
							<input type="text" v-model="name" placeholder="Cafe name">
						</label>
					</div>
					<div class="large-12 medium-12 small-12 cell">
						<label>Address
							<input type="text" v-model="address" placeholder="Address">
						</label>
					</div>
					<div class="large-12 medium-12 small-12 cell">
						<label>City
							<input type="text" v-model="city" placeholder="City">
						</label>
					</div>
					<div class="large-12 medium-12 small-12 cell">
						<label>State
							<input type="text" v-model="state" placeholder="State">
						</label>
					</div>
					<div class="large-12 medium-12 small-12 cell">
						<label>Zip
							<input type="text" v-model="zip" placeholder="Zip">
						</label>
					</div>
					<div class="large-12 medium-12 small-12 cell">
						<a class="button" v-on:click="submitNewCafe()">Add Cafe</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</template>

<script>
export default {
	data() {
		return {
			name: '',
			address: '',
			city: '',
			state: '',
			zip: '',
			validations: {
				name: {
					is_valid: true,
					text: '',
				},
				address: {
					is_valid: true,
					text: ''
				},
				city: {
					is_valid: true,
					text: ''
				},
				state: {
					is_valid: true,
					text: ''
				},
				zip: {
					is_valid: true,
					text: ''
				},
			}
		}
	},
	methods: {
		submitNewCafe() {
			this.$store.dispatch('addCafe', {
				name: this.name,
				address: this.address,
				city: this.city,
				state: this.state,
				zip: this.zip,
			});
		}
	}
}
</script>

<style lang="scss">
	.page {
		margin-top: 15px;
	}
</style>
