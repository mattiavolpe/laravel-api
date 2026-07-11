## 2024-07-11 - IDOR Vulnerability in Resource Controllers
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController because it uses implicit route model binding without Laravel Policies or ownership checks in show, edit, update, and destroy methods.
**Learning:** The architectural pattern of not using Policies makes the application susceptible to IDOR when controllers directly return or modify models fetched by implicit route binding.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies for resource controllers handling user-owned data.
