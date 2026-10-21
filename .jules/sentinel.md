## 2024-10-24 - IDOR in Implicit Route Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources due to missing ownership checks after implicit route model binding in controller methods (show, edit, update, destroy).
**Learning:** Laravel's route model binding retrieves the model based on the URL parameter regardless of the currently authenticated user, leaving the resource exposed if not explicitly checked against the session user.
**Prevention:** Always manually enforce authorization checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on user-specific resources retrieved via route model binding.
