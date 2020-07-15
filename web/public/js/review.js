const btnReviewSubmit = $('.button-review-submit')

function onReviewCaptchaSuccess() {
	btnReviewSubmit.removeAttribute('disabled')
}
