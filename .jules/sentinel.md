## 2024-10-17 - IDOR in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) due to missing ownership checks on implicit route model binding in Laravel.
**Learning:** Laravel's route model binding automatically resolves the model based on the URL, but does not enforce ownership out of the box, allowing authenticated users to access resources belonging to other users.
**Prevention:** Always implement explicit ownership checks (e.g., comparing user_id to auth()->id()) or use Laravel Policies/Gates for user-specific resources when relying on route model binding.
