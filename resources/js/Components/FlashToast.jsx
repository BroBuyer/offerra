import { useEffect, useState } from 'react';
import { usePage } from '@inertiajs/react';

export default function FlashToast() {
    const { flash } = usePage().props;
    const [visible, setVisible] = useState(false);

    useEffect(() => {
        if (flash?.success) {
            setVisible(true);
            const timer = setTimeout(() => setVisible(false), 3500);
            return () => clearTimeout(timer);
        }
    }, [flash?.success]);

    if (!flash?.success) {
        return null;
    }

    return (
        <div
            id="toast"
            className={`toast${visible ? ' is-visible' : ''}`}
            role="status"
        >
            {flash.success}
        </div>
    );
}
