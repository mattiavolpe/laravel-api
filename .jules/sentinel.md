## 2026-06-30 - Insecure Direct Object Reference (IDOR) in Controllers
**Vulnerability:** Controller methods (show, edit, update, destroy) use implicit route model binding without verifying if the authenticated user owns the accessed model (e.g., Project).
**Learning:** This architectural pattern makes the application susceptible to IDOR vulnerabilities unless explicit ownership checks are manually enforced, because Laravel Policies are not implemented.
**Prevention:** Implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403); `) inside controller methods when using implicit model binding without Policies, ensuring loose comparison (`!=`) is used to prevent type mismatch false-positives.
