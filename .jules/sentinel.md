## 2023-10-25 - IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController. Users could access, modify, or delete projects belonging to other users via implicit route model binding.
**Learning:** Laravel's route model binding automatically fetches the resource without checking ownership, making it essential to manually verify that the resource belongs to the currently authenticated user for user-specific models.
**Prevention:** Always implement explicit ownership checks (e.g., $model->user_id != auth()->id()) or use Laravel Policies for resource controllers handling user-owned data.
