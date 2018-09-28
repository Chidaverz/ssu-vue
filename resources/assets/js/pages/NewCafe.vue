<template>
	<div class="page">
		<form>
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-12 medium-12 small-12 cell">
						<label>Name
							<input type="text" v-model="name" placeholder="Cafe name">
							<span class="validation" v-show="!validations.name.is_valid">{{ validations.name.text }}</span>
						</label>
					</div>
					<div class="large-12 medium-12 small-12 cell">
						<label>Address
							<input type="text" v-model="address" placeholder="Address">
							<span class="validation" v-show="!validations.address.is_valid">{{ validations.address.text }}</span>
						</label>
					</div>
					<div class="large-12 medium-12 small-12 cell">
						<label>City
							<input type="text" v-model="city" placeholder="City">
							<span class="validation" v-show="!validations.city.is_valid">{{ validations.city.text }}</span>
						</label>
					</div>
					<div class="large-12 medium-12 small-12 cell">
						<label>State
							<input type="text" v-model="state" placeholder="State">
							<span class="validation" v-show="!validations.state.is_valid">{{ validations.state.text }}</span>
						</label>
					</div>
					<div class="large-12 medium-12 small-12 cell">
						<label>Zip
							<input type="text" v-model="zip" placeholder="Zip">
							<span class="validation" v-show="!validations.zip.is_valid">{{ validations.zip.text }}</span>
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
			console.log(this.validateNewCafe());
			if (!this.validateNewCafe()) {
				return;
			}

			this.$store.dispatch('addCafe', {
				name: this.name,
				address: this.address,
				city: this.city,
				state: this.state,
				zip: this.zip,
			});
		},
		validateNewCafe() {
			let validForm = true;

			if (this.name.trim() == '') {
				validForm = false;
				this.validations.name.is_valid = false;
				this.validations.name.text = 'Please enter valid cafe name';
			}
			else {
				this.validations.name.is_valid = true;
				this.validations.name.text = '';
			}

			if (this.address.trim() == '') {
				validForm = false;
				this.validations.address.is_valid = false;
				this.validations.address.text = 'Please enter valid address';
			}
			else {
				this.validations.address.is_valid = true;
				this.validations.address.text = '';
			}

			if (this.city.trim() == '') {
				validForm = false;
				this.validations.city.is_valid = false;
				this.validations.city.text = 'Please enter valid city';
			}
			else {
				this.validations.city.is_valid = true;
				this.validations.city.text = '';
			}

			if (this.state.trim() == '') {
				validForm = false;
				this.validations.state.is_valid = false;
				this.validations.state.text = 'Please enter valid state';
			}
			else {
				this.validations.state.is_valid = true;
				this.validations.state.text = '';
			}

			if (this.zip.trim() == '') {
				validForm = false;
				this.validations.zip.is_valid = false;
				this.validations.zip.text = 'Please enter valid zip';
			}
			else {
				this.validations.zip.is_valid = true;
				this.validations.zip.text = '';
			}

			return validForm;
		}
	}
}
</script>

<style lang="scss">
	.page {
		margin-top: 15px;
	}
</style>
